<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121112150923 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("DROP INDEX IDX_3D8E29F61B0BAAAD ON Disciplina");
        $this->addSql("ALTER TABLE Disciplina DROP codice_professione");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Disciplina ADD codice_professione INT DEFAULT NULL");
        $this->addSql("CREATE INDEX IDX_3D8E29F61B0BAAAD ON Disciplina (codice_professione)");
    }
}
