<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120622152337 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE ideacpa_risposta (id INT AUTO_INCREMENT NOT NULL, domanda_id INT DEFAULT NULL, descrizione VARCHAR(255) NOT NULL, vero TINYINT(1) NOT NULL, INDEX IDX_E9D3DBEA9AA543D1 (domanda_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("ALTER TABLE ideacpa_risposta ADD CONSTRAINT FK_E9D3DBEA9AA543D1 FOREIGN KEY (domanda_id) REFERENCES ideacpa_domanda(id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("DROP TABLE ideacpa_risposta");
    }
}