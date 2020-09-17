<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200916111632 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article_stock DROP FOREIGN KEY FK_3C8124715D168D85');
        $this->addSql('DROP TABLE article_stock');
        $this->addSql('DROP TABLE stock');
        $this->addSql('ALTER TABLE article ADD quantite INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_stock (id INT AUTO_INCREMENT NOT NULL, id_article_id INT NOT NULL, id_stock_id INT NOT NULL, INDEX IDX_3C812471D71E064B (id_article_id), INDEX IDX_3C8124715D168D85 (id_stock_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE stock (id INT AUTO_INCREMENT NOT NULL, quantite INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE article_stock ADD CONSTRAINT FK_3C8124715D168D85 FOREIGN KEY (id_stock_id) REFERENCES stock (id)');
        $this->addSql('ALTER TABLE article_stock ADD CONSTRAINT FK_3C812471D71E064B FOREIGN KEY (id_article_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE article DROP quantite');
    }
}
