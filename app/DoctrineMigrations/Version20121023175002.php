<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121023175002 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE RisposteUtentiQuestionarioValutazione (id INT AUTO_INCREMENT NOT NULL, anagrafica_id INT NOT NULL, accreditamento_id INT NOT NULL, rilevanza_degli_argomenti VARCHAR(255) NOT NULL, qualita_educativa VARCHAR(255) NOT NULL, utilita_evento VARCHAR(255) NOT NULL, influenza_sponsor VARCHAR(255) NOT NULL, esempio_influenza_sponsor VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("DROP TABLE RisposteUtentiQuestionarioValutazione");
    }
}