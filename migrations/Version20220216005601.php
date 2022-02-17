<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220216005601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD task LONGTEXT DEFAULT NULL, 
                            ADD requirement LONGTEXT DEFAULT NULL, 
                            ADD location VARCHAR(255) NOT NULL, 
                            ADD email VARCHAR(255) NOT NULL, ADD degree VARCHAR(255) NOT NULL, 
                            ADD experience INT NOT NULL, 
                            ADD website VARCHAR(255) DEFAULT NULL, 
                            ADD salary VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post DROP task, DROP requirement, DROP location, DROP email, DROP degree, DROP experience, DROP website, DROP salary');
    }
}
