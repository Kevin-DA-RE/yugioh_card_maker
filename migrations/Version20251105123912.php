<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251105123912 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE archetype (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE atk (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE card (id INT AUTO_INCREMENT NOT NULL, race_id INT NOT NULL, archetype_id INT DEFAULT NULL, atk_id INT DEFAULT NULL, def_id INT DEFAULT NULL, frametype_id INT DEFAULT NULL, level_id INT DEFAULT NULL, id_card INT NOT NULL, name VARCHAR(255) NOT NULL, typeline LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', description LONGTEXT NOT NULL, image_url VARCHAR(255) NOT NULL, image_url_small VARCHAR(255) NOT NULL, image_url_cropped VARCHAR(255) NOT NULL, INDEX IDX_161498D36E59D40D (race_id), INDEX IDX_161498D3732C6CC7 (archetype_id), INDEX IDX_161498D3B1F5773 (atk_id), INDEX IDX_161498D3F438A02F (def_id), INDEX IDX_161498D349D6103A (frametype_id), INDEX IDX_161498D35FB14BA7 (level_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE def (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE frame_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE level (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE race (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D36E59D40D FOREIGN KEY (race_id) REFERENCES race (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3732C6CC7 FOREIGN KEY (archetype_id) REFERENCES archetype (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3B1F5773 FOREIGN KEY (atk_id) REFERENCES atk (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D3F438A02F FOREIGN KEY (def_id) REFERENCES def (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D349D6103A FOREIGN KEY (frametype_id) REFERENCES frame_type (id)');
        $this->addSql('ALTER TABLE card ADD CONSTRAINT FK_161498D35FB14BA7 FOREIGN KEY (level_id) REFERENCES level (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D36E59D40D');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3732C6CC7');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3B1F5773');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D3F438A02F');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D349D6103A');
        $this->addSql('ALTER TABLE card DROP FOREIGN KEY FK_161498D35FB14BA7');
        $this->addSql('DROP TABLE archetype');
        $this->addSql('DROP TABLE atk');
        $this->addSql('DROP TABLE card');
        $this->addSql('DROP TABLE def');
        $this->addSql('DROP TABLE frame_type');
        $this->addSql('DROP TABLE level');
        $this->addSql('DROP TABLE race');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
