<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190903055108 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user_handle_role_handle (user_handle_id INT NOT NULL, role_handle_id INT NOT NULL, INDEX IDX_B43D4ABB9CC5E178 (user_handle_id), INDEX IDX_B43D4ABBCDD1BF40 (role_handle_id), PRIMARY KEY(user_handle_id, role_handle_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_handle_role_handle ADD CONSTRAINT FK_B43D4ABB9CC5E178 FOREIGN KEY (user_handle_id) REFERENCES user_handle (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_handle_role_handle ADD CONSTRAINT FK_B43D4ABBCDD1BF40 FOREIGN KEY (role_handle_id) REFERENCES role_handle (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user_handle_role_handle');
    }
}
