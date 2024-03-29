<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120830110902 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Iscritti ADD accreditamento_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Iscritti ADD CONSTRAINT FK_E9E91F4984452F0F FOREIGN KEY (accreditamento_id) REFERENCES ideacpa_accreditamento(id)");
        $this->addSql("CREATE INDEX IDX_E9E91F4984452F0F ON Iscritti (accreditamento_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Iscritti DROP FOREIGN KEY FK_E9E91F4984452F0F");
        $this->addSql("DROP INDEX IDX_E9E91F4984452F0F ON Iscritti");
        $this->addSql("ALTER TABLE Iscritti DROP accreditamento_id");
    }
}
