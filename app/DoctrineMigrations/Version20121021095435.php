<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121021095435 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE ideacpa_iscritti (id INT AUTO_INCREMENT NOT NULL, accreditamento_id INT NOT NULL, cognome VARCHAR(255) NOT NULL, nome VARCHAR(255) NOT NULL, codice_fiscale VARCHAR(255) NOT NULL, tipologia_iscritto VARCHAR(255) NOT NULL, INDEX IDX_5C45A58784452F0F (accreditamento_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("CREATE TABLE ideacpa_anagrafica (id INT AUTO_INCREMENT NOT NULL, accreditamento_id INT DEFAULT NULL, tipo_iscrizione VARCHAR(255) NOT NULL, nome VARCHAR(255) NOT NULL, cognome VARCHAR(255) NOT NULL, data_nascita DATE NOT NULL, luogo_nascita VARCHAR(255) NOT NULL, codice_fiscale VARCHAR(255) NOT NULL, ordine_numero VARCHAR(255) NOT NULL, ordine_citta VARCHAR(255) NOT NULL, indirizzo VARCHAR(255) NOT NULL, indirizzo_cap VARCHAR(255) NOT NULL, indirizzo_citta VARCHAR(255) NOT NULL, indirizzo_provincia VARCHAR(255) NOT NULL, telefono VARCHAR(255) NOT NULL, cellulare VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, professione VARCHAR(255) NOT NULL, disciplina VARCHAR(255) NOT NULL, qualifica VARCHAR(255) NOT NULL, sponsor TINYINT(1) NOT NULL, sponsor_azienda VARCHAR(255) NOT NULL, privacy TINYINT(1) NOT NULL, INDEX IDX_E5585A8384452F0F (accreditamento_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("ALTER TABLE ideacpa_iscritti ADD CONSTRAINT FK_5C45A58784452F0F FOREIGN KEY (accreditamento_id) REFERENCES ideacpa_accreditamento(id)");
        $this->addSql("ALTER TABLE ideacpa_anagrafica ADD CONSTRAINT FK_E5585A8384452F0F FOREIGN KEY (accreditamento_id) REFERENCES ideacpa_accreditamento(id)");
        $this->addSql("DROP TABLE Anagrafica");
        $this->addSql("DROP TABLE Iscritti");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("CREATE TABLE Anagrafica (id INT AUTO_INCREMENT NOT NULL, accreditamento_id INT DEFAULT NULL, tipo_iscrizione VARCHAR(255) NOT NULL, nome VARCHAR(255) NOT NULL, cognome VARCHAR(255) NOT NULL, data_nascita DATE NOT NULL, luogo_nascita VARCHAR(255) NOT NULL, codice_fiscale VARCHAR(255) NOT NULL, ordine_numero VARCHAR(255) NOT NULL, ordine_citta VARCHAR(255) NOT NULL, indirizzo VARCHAR(255) NOT NULL, indirizzo_cap VARCHAR(255) NOT NULL, indirizzo_citta VARCHAR(255) NOT NULL, indirizzo_provincia VARCHAR(255) NOT NULL, telefono VARCHAR(255) NOT NULL, cellulare VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, professione VARCHAR(255) NOT NULL, disciplina VARCHAR(255) NOT NULL, qualifica VARCHAR(255) NOT NULL, sponsor TINYINT(1) NOT NULL, sponsor_azienda VARCHAR(255) NOT NULL, privacy TINYINT(1) NOT NULL, INDEX IDX_9B954F7D84452F0F (accreditamento_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("CREATE TABLE Iscritti (id INT AUTO_INCREMENT NOT NULL, accreditamento_id INT NOT NULL, cognome VARCHAR(255) NOT NULL, nome VARCHAR(255) NOT NULL, codice_fiscale VARCHAR(255) NOT NULL, tipologia_iscritto VARCHAR(255) NOT NULL, INDEX IDX_E9E91F4984452F0F (accreditamento_id), PRIMARY KEY(id)) ENGINE = InnoDB");
        $this->addSql("ALTER TABLE Anagrafica ADD CONSTRAINT FK_9B954F7D84452F0F FOREIGN KEY (accreditamento_id) REFERENCES ideacpa_accreditamento(id)");
        $this->addSql("ALTER TABLE Iscritti ADD CONSTRAINT FK_E9E91F4984452F0F FOREIGN KEY (accreditamento_id) REFERENCES ideacpa_accreditamento(id)");
        $this->addSql("DROP TABLE ideacpa_iscritti");
        $this->addSql("DROP TABLE ideacpa_anagrafica");
    }
}