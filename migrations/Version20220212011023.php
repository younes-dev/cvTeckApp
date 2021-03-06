<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220212011023 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
//        // this up() migration is auto-generated, please modify it to your needs
//        $this->addSql('CREATE TABLE apply (id INT AUTO_INCREMENT NOT NULL, resume_id INT DEFAULT NULL, offre_id INT DEFAULT NULL, INDEX IDX_BD2F8C1FD262AF09 (resume_id), INDEX IDX_BD2F8C1F4CC8505A (offre_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
//        $this->addSql('ALTER TABLE apply ADD CONSTRAINT FK_BD2F8C1FD262AF09 FOREIGN KEY (resume_id) REFERENCES user (id)');
//        $this->addSql('ALTER TABLE apply ADD CONSTRAINT FK_BD2F8C1F4CC8505A FOREIGN KEY (offre_id) REFERENCES post (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE apply');
    }
}
