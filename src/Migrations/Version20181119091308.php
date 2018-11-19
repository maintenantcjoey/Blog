<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181119091308 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE category ADD girl VARCHAR(255) NOT NULL, ADD boy VARCHAR(255) NOT NULL, ADD mix VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE article ADD rose VARCHAR(255) NOT NULL, ADD violet VARCHAR(255) NOT NULL, ADD rouge VARCHAR(255) NOT NULL, ADD bleu VARCHAR(255) NOT NULL, ADD noir VARCHAR(255) NOT NULL, ADD vert VARCHAR(255) NOT NULL, ADD orange VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE article DROP rose, DROP violet, DROP rouge, DROP bleu, DROP noir, DROP vert, DROP orange');
        $this->addSql('ALTER TABLE category DROP girl, DROP boy, DROP mix');
    }
}
