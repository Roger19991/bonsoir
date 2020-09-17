<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200915113503 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article DROP FOREIGN KEY FK_23A0E665825957B');
        $this->addSql('DROP INDEX IDX_23A0E665825957B ON article');
        $this->addSql('ALTER TABLE article DROP article_stock_id');
        $this->addSql('ALTER TABLE article_stock ADD id_article_id INT NOT NULL, ADD id_stock_id INT NOT NULL');
        $this->addSql('ALTER TABLE article_stock ADD CONSTRAINT FK_3C812471D71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article_stock ADD CONSTRAINT FK_3C8124715D168D85 FOREIGN KEY (id_stock_id) REFERENCES stock (id)');
        $this->addSql('CREATE INDEX IDX_3C812471D71E064B ON article_stock (id_article_id)');
        $this->addSql('CREATE INDEX IDX_3C8124715D168D85 ON article_stock (id_stock_id)');
        $this->addSql('ALTER TABLE stock DROP FOREIGN KEY FK_4B3656605825957B');
        $this->addSql('DROP INDEX IDX_4B3656605825957B ON stock');
        $this->addSql('ALTER TABLE stock DROP article_stock_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD article_stock_id INT NOT NULL');
        $this->addSql('ALTER TABLE article ADD CONSTRAINT FK_23A0E665825957B FOREIGN KEY (article_stock_id) REFERENCES article_stock (id)');
        $this->addSql('CREATE INDEX IDX_23A0E665825957B ON article (article_stock_id)');
        $this->addSql('ALTER TABLE article_stock DROP FOREIGN KEY FK_3C812471D71E064B');
        $this->addSql('ALTER TABLE article_stock DROP FOREIGN KEY FK_3C8124715D168D85');
        $this->addSql('DROP INDEX IDX_3C812471D71E064B ON article_stock');
        $this->addSql('DROP INDEX IDX_3C8124715D168D85 ON article_stock');
        $this->addSql('ALTER TABLE article_stock DROP id_article_id, DROP id_stock_id');
        $this->addSql('ALTER TABLE stock ADD article_stock_id INT NOT NULL');
        $this->addSql('ALTER TABLE stock ADD CONSTRAINT FK_4B3656605825957B FOREIGN KEY (article_stock_id) REFERENCES article_stock (id)');
        $this->addSql('CREATE INDEX IDX_4B3656605825957B ON stock (article_stock_id)');
    }
}
