<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180322142917 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_produit (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, commandes_id INT DEFAULT NULL, quantite VARCHAR(50) NOT NULL, INDEX IDX_DF1E9E87F347EFB (produit_id), INDEX IDX_DF1E9E878BF5C2E6 (commandes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commandes (id INT AUTO_INCREMENT NOT NULL, datecreation DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_user (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, commandes_id INT DEFAULT NULL, INDEX IDX_E6FFD7AAA76ED395 (user_id), INDEX IDX_E6FFD7AA8BF5C2E6 (commandes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, envoie_id INT DEFAULT NULL, recoie_id INT DEFAULT NULL, commandes_id INT DEFAULT NULL, contenu VARCHAR(255) NOT NULL, datecreation DATETIME NOT NULL, INDEX IDX_67F068BC425C347D (envoie_id), INDEX IDX_67F068BCE271B4FA (recoie_id), INDEX IDX_67F068BC8BF5C2E6 (commandes_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_user (commentaire_id INT NOT NULL, user_id INT NOT NULL, INDEX IDX_646B121BBA9CD190 (commentaire_id), INDEX IDX_646B121BA76ED395 (user_id), PRIMARY KEY(commentaire_id, user_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livreur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, vehicule VARCHAR(50) NOT NULL, `long` VARCHAR(60) NOT NULL, lat VARCHAR(64) NOT NULL, bon VARCHAR(12) NOT NULL, facture VARCHAR(150) NOT NULL, note VARCHAR(150) NOT NULL, horaire LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', UNIQUE INDEX UNIQ_EB7A4E6D3B97A968 (`long`), UNIQUE INDEX UNIQ_EB7A4E6DFC7DFD6B (bon), UNIQUE INDEX UNIQ_EB7A4E6DFE866410 (facture), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producteur (id INT AUTO_INCREMENT NOT NULL, horaire VARCHAR(50) NOT NULL, bon VARCHAR(60) NOT NULL, facture VARCHAR(64) NOT NULL, note VARCHAR(12) NOT NULL, UNIQUE INDEX UNIQ_7EDBEE10FC7DFD6B (bon), UNIQUE INDEX UNIQ_7EDBEE10CFBDFA14 (note), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE producteur_produit (id INT AUTO_INCREMENT NOT NULL, producteur_id INT DEFAULT NULL, produit_id INT DEFAULT NULL, INDEX IDX_4CD25379AB9BB300 (producteur_id), INDEX IDX_4CD25379F347EFB (produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, quantite VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE roles (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, roles_id INT DEFAULT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, email VARCHAR(60) NOT NULL, password VARCHAR(64) NOT NULL, tel VARCHAR(12) NOT NULL, adresse VARCHAR(150) NOT NULL, description VARCHAR(255) NOT NULL, datecreation DATETIME NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D649F037AB0F (tel), INDEX IDX_8D93D64938C751C4 (roles_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_produit (id INT AUTO_INCREMENT NOT NULL, produit_id INT DEFAULT NULL, user_id INT DEFAULT NULL, INDEX IDX_71A8F22DF347EFB (produit_id), INDEX IDX_71A8F22DA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E87F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE commande_produit ADD CONSTRAINT FK_DF1E9E878BF5C2E6 FOREIGN KEY (commandes_id) REFERENCES commandes (id)');
        $this->addSql('ALTER TABLE commande_user ADD CONSTRAINT FK_E6FFD7AAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commande_user ADD CONSTRAINT FK_E6FFD7AA8BF5C2E6 FOREIGN KEY (commandes_id) REFERENCES commandes (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC425C347D FOREIGN KEY (envoie_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCE271B4FA FOREIGN KEY (recoie_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC8BF5C2E6 FOREIGN KEY (commandes_id) REFERENCES commandes (id)');
        $this->addSql('ALTER TABLE commentaire_user ADD CONSTRAINT FK_646B121BBA9CD190 FOREIGN KEY (commentaire_id) REFERENCES commentaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire_user ADD CONSTRAINT FK_646B121BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE producteur_produit ADD CONSTRAINT FK_4CD25379AB9BB300 FOREIGN KEY (producteur_id) REFERENCES producteur (id)');
        $this->addSql('ALTER TABLE producteur_produit ADD CONSTRAINT FK_4CD25379F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64938C751C4 FOREIGN KEY (roles_id) REFERENCES roles (id)');
        $this->addSql('ALTER TABLE user_produit ADD CONSTRAINT FK_71A8F22DF347EFB FOREIGN KEY (produit_id) REFERENCES produit (id)');
        $this->addSql('ALTER TABLE user_produit ADD CONSTRAINT FK_71A8F22DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E878BF5C2E6');
        $this->addSql('ALTER TABLE commande_user DROP FOREIGN KEY FK_E6FFD7AA8BF5C2E6');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC8BF5C2E6');
        $this->addSql('ALTER TABLE commentaire_user DROP FOREIGN KEY FK_646B121BBA9CD190');
        $this->addSql('ALTER TABLE producteur_produit DROP FOREIGN KEY FK_4CD25379AB9BB300');
        $this->addSql('ALTER TABLE commande_produit DROP FOREIGN KEY FK_DF1E9E87F347EFB');
        $this->addSql('ALTER TABLE producteur_produit DROP FOREIGN KEY FK_4CD25379F347EFB');
        $this->addSql('ALTER TABLE user_produit DROP FOREIGN KEY FK_71A8F22DF347EFB');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64938C751C4');
        $this->addSql('ALTER TABLE commande_user DROP FOREIGN KEY FK_E6FFD7AAA76ED395');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC425C347D');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCE271B4FA');
        $this->addSql('ALTER TABLE commentaire_user DROP FOREIGN KEY FK_646B121BA76ED395');
        $this->addSql('ALTER TABLE user_produit DROP FOREIGN KEY FK_71A8F22DA76ED395');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE commande_produit');
        $this->addSql('DROP TABLE commandes');
        $this->addSql('DROP TABLE commande_user');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE commentaire_user');
        $this->addSql('DROP TABLE livreur');
        $this->addSql('DROP TABLE producteur');
        $this->addSql('DROP TABLE producteur_produit');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE roles');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_produit');
    }
}
