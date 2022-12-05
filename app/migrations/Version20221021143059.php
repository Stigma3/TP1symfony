<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221021143059 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD pseudo VARCHAR(25) NOT NULL');

        $this->addSql("INSERT INTO `user` (`id`, `email`, `roles`, `password`, `name`, `surname`, `pseudo`) VALUES
        (1, 'test1@gmail.com', '[]', '\$2y\$13\$knbyvyLevuc6W22RHQquIORWjrMdl7r8wMxUevrOoKVCjaALgsmde', 'Test', 'test', 'leTest'),
        (2, 'test2@gmail.com', '[\"utilisateur\"]', '\$2y\$13\$NjjYvkJw5rlq5D/7MccWZ.fRaC0dytr1zx8iV8gwxJ0yLIYx4MR5C', 'Joh', 'Nathan', 'AdileJoh');");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP pseudo');
    }
}
