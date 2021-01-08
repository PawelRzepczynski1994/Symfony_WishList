<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201218140625 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wishes DROP FOREIGN KEY FK_DD0FA36845BA1CA3');
        $this->addSql('DROP INDEX FK_DD0FA36845BA1CA3 ON wishes');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE wishes ADD CONSTRAINT FK_DD0FA36845BA1CA3 FOREIGN KEY (id_list) REFERENCES list_wishes (id)');
        $this->addSql('CREATE INDEX FK_DD0FA36845BA1CA3 ON wishes (id_list)');
    }
}
