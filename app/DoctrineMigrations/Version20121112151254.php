<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20121112151254 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Disciplina ADD professione_id INT DEFAULT NULL");
        $this->addSql("ALTER TABLE Disciplina ADD CONSTRAINT FK_3D8E29F68B926C9E FOREIGN KEY (professione_id) REFERENCES Professione(id)");
        $this->addSql("CREATE INDEX IDX_3D8E29F68B926C9E ON Disciplina (professione_id)");
    }

    public function down(Schema $schema)
    {
        // this down() migration is autogenerated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != "mysql");
        
        $this->addSql("ALTER TABLE Disciplina DROP FOREIGN KEY FK_3D8E29F68B926C9E");
        $this->addSql("DROP INDEX IDX_3D8E29F68B926C9E ON Disciplina");
        $this->addSql("ALTER TABLE Disciplina DROP professione_id");
    }
}