<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251108000258 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE genre (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE card ADD genre_id INT DEFAULT NULL, CHANGE typeline typeline VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D34296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('CREATE INDEX IDX_161498D34296D31F ON card (genre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D34296D31F');
        $this->addSql('DROP TABLE genre');
        $this->addSql('DROP INDEX IDX_161498D34296D31F ON card');
        $this->addSql('ALTER TABLE card DROP genre_id, CHANGE typeline typeline TINYTEXT NOT NULL COMMENT \'(DC2Type:array)\'');
    }
}
