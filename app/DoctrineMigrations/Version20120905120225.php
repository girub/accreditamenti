<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20120905120225 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE Anagrafica (id INT AUTO_INCREMENT NOT NULL, tipo_iscrizione VARCHAR(255) NOT NULL, nome VARCHAR(255) NOT NULL, cognome VARCHAR(255) NOT NULL, data_nascita DATE NOT NULL, luogo_nascita VARCHAR(255) NOT NULL, codice_fiscale VARCHAR(255) NOT NULL, ordine_numero VARCHAR(255) NOT NULL, ordine_citta VARCHAR(255) NOT NULL, indirizzo VARCHAR(255) NOT NULL, indirizzo_cap VARCHAR(255) NOT NULL, indirizzo_citta VARCHAR(255) NOT NULL, indirizzo_provincia VARCHAR(255) NOT NULL, telefono VARCHAR(255) NOT NULL, cellulare VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, professione VARCHAR(255) NOT NULL, disciplina VARCHAR(255) NOT NULL, qualifica VARCHAR(255) NOT NULL, sponsor TINYINT(1) NOT NULL, sponsor_azienda VARCHAR(255) NOT NULL, privacy TINYINT(1) NOT NULL, PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("ALTER TABLE Iscritti CHANGE accreditamento_id accreditamento_id INT NOT NULL");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("DROP TABLE Anagrafica");
        $this->addSql("ALTER TABLE Iscritti CHANGE accreditamento_id accreditamento_id INT DEFAULT NULL");
    }
}