<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20181128180548 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE cars (id INT AUTO_INCREMENT NOT NULL, make VARCHAR(255) NOT NULL, model VARCHAR(255) NOT NULL, travelled_distance INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, birth_day DATETIME NOT NULL, is_young_driver TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE parts (id INT AUTO_INCREMENT NOT NULL, supplier_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, price NUMERIC(10, 2) NOT NULL, quantity INT NOT NULL, INDEX IDX_6940A7FE2ADD6D8C (supplier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE part_cars (part_id INT NOT NULL, car_id INT NOT NULL, INDEX IDX_EF6F63994CE34BEC (part_id), INDEX IDX_EF6F6399C3C6F69F (car_id), PRIMARY KEY(part_id, car_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sales (id INT AUTO_INCREMENT NOT NULL, car_id INT DEFAULT NULL, customer_id INT DEFAULT NULL, discount DOUBLE PRECISION NOT NULL, UNIQUE INDEX UNIQ_6B817044C3C6F69F (car_id), INDEX IDX_6B8170449395C3F3 (customer_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE suppliers (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, is_importer TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE parts ADD CONSTRAINT FK_6940A7FE2ADD6D8C FOREIGN KEY (supplier_id) REFERENCES suppliers (id)');
        $this->addSql('ALTER TABLE part_cars ADD CONSTRAINT FK_EF6F63994CE34BEC FOREIGN KEY (part_id) REFERENCES parts (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE part_cars ADD CONSTRAINT FK_EF6F6399C3C6F69F FOREIGN KEY (car_id) REFERENCES cars (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE sales ADD CONSTRAINT FK_6B817044C3C6F69F FOREIGN KEY (car_id) REFERENCES cars (id)');
        $this->addSql('ALTER TABLE sales ADD CONSTRAINT FK_6B8170449395C3F3 FOREIGN KEY (customer_id) REFERENCES customers (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE part_cars DROP FOREIGN KEY FK_EF6F6399C3C6F69F');
        $this->addSql('ALTER TABLE sales DROP FOREIGN KEY FK_6B817044C3C6F69F');
        $this->addSql('ALTER TABLE sales DROP FOREIGN KEY FK_6B8170449395C3F3');
        $this->addSql('ALTER TABLE part_cars DROP FOREIGN KEY FK_EF6F63994CE34BEC');
        $this->addSql('ALTER TABLE parts DROP FOREIGN KEY FK_6940A7FE2ADD6D8C');
        $this->addSql('DROP TABLE cars');
        $this->addSql('DROP TABLE customers');
        $this->addSql('DROP TABLE parts');
        $this->addSql('DROP TABLE part_cars');
        $this->addSql('DROP TABLE sales');
        $this->addSql('DROP TABLE suppliers');
    }
}
