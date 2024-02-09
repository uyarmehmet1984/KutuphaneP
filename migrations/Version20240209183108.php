<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240209183108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE book (id INT AUTO_INCREMENT NOT NULL, ad VARCHAR(255) NOT NULL, yazar VARCHAR(255) NOT NULL, sayfa_sayisi SMALLINT NOT NULL, isbn BIGINT NOT NULL, sayi INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE borrowedbook (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, alis_tarihi DATE NOT NULL, iade_tarihi DATE DEFAULT NULL, barkod_no NUMERIC(10, 0) NOT NULL, INDEX IDX_AE57870BA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE borrowedbook_book (borrowedbook_id INT NOT NULL, book_id INT NOT NULL, INDEX IDX_C8E9C5EBEBD9E0A4 (borrowedbook_id), INDEX IDX_C8E9C5EB16A2B381 (book_id), PRIMARY KEY(borrowedbook_id, book_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, ad VARCHAR(255) DEFAULT NULL, soyad VARCHAR(255) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, telefon VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE borrowedbook ADD CONSTRAINT FK_AE57870BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE borrowedbook_book ADD CONSTRAINT FK_C8E9C5EBEBD9E0A4 FOREIGN KEY (borrowedbook_id) REFERENCES borrowedbook (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE borrowedbook_book ADD CONSTRAINT FK_C8E9C5EB16A2B381 FOREIGN KEY (book_id) REFERENCES book (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE borrowedbook DROP FOREIGN KEY FK_AE57870BA76ED395');
        $this->addSql('ALTER TABLE borrowedbook_book DROP FOREIGN KEY FK_C8E9C5EBEBD9E0A4');
        $this->addSql('ALTER TABLE borrowedbook_book DROP FOREIGN KEY FK_C8E9C5EB16A2B381');
        $this->addSql('DROP TABLE book');
        $this->addSql('DROP TABLE borrowedbook');
        $this->addSql('DROP TABLE borrowedbook_book');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
