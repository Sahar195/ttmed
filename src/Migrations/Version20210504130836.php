<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210504130836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admin_rh (carte_id INT AUTO_INCREMENT NOT NULL, situation VARCHAR(30) NOT NULL, niveau_etude VARCHAR(40) DEFAULT NULL, poste VARCHAR(40) NOT NULL, date_recrutement VARCHAR(255) NOT NULL, residence DATE NOT NULL, contact1 INT NOT NULL, contact2 INT DEFAULT NULL, UNIQUE INDEX UNIQ_C4AB05A1EC2D9ACA (situation), PRIMARY KEY(carte_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE dossier_medical ADD les_donnees_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier_medical ADD CONSTRAINT FK_3581EE6270826EA2 FOREIGN KEY (les_donnees_id) REFERENCES donnees (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3581EE6270826EA2 ON dossier_medical (les_donnees_id)');
        $this->addSql('ALTER TABLE fiche_medicale ADD dossier_medical_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE fiche_medicale ADD CONSTRAINT FK_20D23267750B79F FOREIGN KEY (dossier_medical_id) REFERENCES dossier_medical (id)');
        $this->addSql('CREATE INDEX IDX_20D23267750B79F ON fiche_medicale (dossier_medical_id)');
        $this->addSql('ALTER TABLE utilisateur ADD roles JSON NOT NULL, ADD password VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(180) NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B3E7927C74 ON utilisateur (email)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admin_rh');
        $this->addSql('ALTER TABLE dossier_medical DROP FOREIGN KEY FK_3581EE6270826EA2');
        $this->addSql('DROP INDEX UNIQ_3581EE6270826EA2 ON dossier_medical');
        $this->addSql('ALTER TABLE dossier_medical DROP les_donnees_id');
        $this->addSql('ALTER TABLE fiche_medicale DROP FOREIGN KEY FK_20D23267750B79F');
        $this->addSql('DROP INDEX IDX_20D23267750B79F ON fiche_medicale');
        $this->addSql('ALTER TABLE fiche_medicale DROP dossier_medical_id');
        $this->addSql('DROP INDEX UNIQ_1D1C63B3E7927C74 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP roles, DROP password, CHANGE email email VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
