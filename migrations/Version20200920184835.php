<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200920184835 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE base CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur CHANGE user_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur_regel CHANGE factuur_id_id factuur_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE product_id_id product_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE memo CHANGE user_id user_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE base CHANGE user_id user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur CHANGE user_id_id user_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factuur_regel CHANGE factuur_id_id factuur_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE image CHANGE product_id_id product_id_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE memo CHANGE user_id user_id INT DEFAULT NULL');
    }
}
