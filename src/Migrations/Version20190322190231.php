<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20190322190231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return 'Create Track entity';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('CREATE TABLE track (id INT AUTO_INCREMENT NOT NULL, track_id VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DROP TABLE track');
    }
}
