<?php

namespace App\Test\Controller;

use App\Entity\Borrowedbook;
use App\Repository\BorrowedbookRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BorrowedbookControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private EntityManagerInterface $manager;
    private EntityRepository $repository;
    private string $path = '/borrowedbook/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->manager = static::getContainer()->get('doctrine')->getManager();
        $this->repository = $this->manager->getRepository(Borrowedbook::class);

        foreach ($this->repository->findAll() as $object) {
            $this->manager->remove($object);
        }

        $this->manager->flush();
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Borrowedbook index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'borrowedbook[alisTarihi]' => 'Testing',
            'borrowedbook[iadeTarihi]' => 'Testing',
            'borrowedbook[BarkodNo]' => 'Testing',
            'borrowedbook[book]' => 'Testing',
            'borrowedbook[user]' => 'Testing',
        ]);

        self::assertResponseRedirects('/sweet/food/');

        self::assertSame(1, $this->getRepository()->count([]));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Borrowedbook();
        $fixture->setAlisTarihi('My Title');
        $fixture->setIadeTarihi('My Title');
        $fixture->setBarkodNo('My Title');
        $fixture->setBook('My Title');
        $fixture->setUser('My Title');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Borrowedbook');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Borrowedbook();
        $fixture->setAlisTarihi('Value');
        $fixture->setIadeTarihi('Value');
        $fixture->setBarkodNo('Value');
        $fixture->setBook('Value');
        $fixture->setUser('Value');

        $this->manager->persist($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'borrowedbook[alisTarihi]' => 'Something New',
            'borrowedbook[iadeTarihi]' => 'Something New',
            'borrowedbook[BarkodNo]' => 'Something New',
            'borrowedbook[book]' => 'Something New',
            'borrowedbook[user]' => 'Something New',
        ]);

        self::assertResponseRedirects('/borrowedbook/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getAlisTarihi());
        self::assertSame('Something New', $fixture[0]->getIadeTarihi());
        self::assertSame('Something New', $fixture[0]->getBarkodNo());
        self::assertSame('Something New', $fixture[0]->getBook());
        self::assertSame('Something New', $fixture[0]->getUser());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();
        $fixture = new Borrowedbook();
        $fixture->setAlisTarihi('Value');
        $fixture->setIadeTarihi('Value');
        $fixture->setBarkodNo('Value');
        $fixture->setBook('Value');
        $fixture->setUser('Value');

        $this->manager->remove($fixture);
        $this->manager->flush();

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertResponseRedirects('/borrowedbook/');
        self::assertSame(0, $this->repository->count([]));
    }
}
