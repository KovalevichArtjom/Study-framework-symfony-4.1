<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180701180537 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE UNIQUE INDEX UNIQ_C1EE637C6FC1CE2C ON organization (oktmo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F46A8609BDD75AB ON place_job (okmo)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_F46A8609E4EB19B0 ON place_job (snils)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9E4EB19B0 ON users (snils)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_C1EE637C6FC1CE2C ON organization');
        $this->addSql('DROP INDEX UNIQ_F46A8609BDD75AB ON place_job');
        $this->addSql('DROP INDEX UNIQ_F46A8609E4EB19B0 ON place_job');
        $this->addSql('DROP INDEX UNIQ_1483A5E9E4EB19B0 ON users');
    }
}
