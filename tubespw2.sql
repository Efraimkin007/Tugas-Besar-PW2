-- MySQL Script generated by MySQL Workbench
-- Sat Jan 16 17:20:06 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema TubesPW2(1)
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema TubesPW2(1)
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `TubesPW2(1)` ;
USE `TubesPW2(1)` ;

-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`BahanBakar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`BahanBakar` (
  `idBahanBakar` INT NOT NULL,
  `JenisBahanBakar` VARCHAR(45) NULL,
  `HargaModal` INT NULL,
  `HargaJual` INT NULL,
  PRIMARY KEY (`idBahanBakar`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`Pelangggan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`Pelangggan` (
  `idPelanggan` INT NOT NULL AUTO_INCREMENT,
  `NamaPelanggan` VARCHAR(45) NULL,
  `StatusMember` VARCHAR(45) NULL,
  PRIMARY KEY (`idPelanggan`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`Pegawai`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`Pegawai` (
  `idPegawai` VARCHAR(10) NOT NULL,
  `NamaPegawai` VARCHAR(45) NULL,
  `AkumulasiNilai` VARCHAR(45) NULL,
  PRIMARY KEY (`idPegawai`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`Transaksi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`Transaksi` (
  `idTransaksi` INT NOT NULL AUTO_INCREMENT,
  `TglTransaksi` VARCHAR(45) NULL,
  `JumlahLiter` INT NULL,
  `NilaiPelayanan` INT NULL,
  `Pelangggan_idPelanggan` INT NOT NULL,
  `BahanBakar_idBahanBakar` INT NOT NULL,
  `Pegawai_idPegawai` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`idTransaksi`),
  INDEX `fk_Transaksi_Pelangggan1_idx` (`Pelangggan_idPelanggan` ASC) VISIBLE,
  INDEX `fk_Transaksi_Bahan Bakar1_idx` (`BahanBakar_idBahanBakar` ASC) VISIBLE,
  INDEX `fk_Transaksi_Pegawai1_idx` (`Pegawai_idPegawai` ASC) VISIBLE,
  CONSTRAINT `fk_Transaksi_Pelangggan1`
    FOREIGN KEY (`Pelangggan_idPelanggan`)
    REFERENCES `TubesPW2(1)`.`Pelangggan` (`idPelanggan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Transaksi_Bahan Bakar1`
    FOREIGN KEY (`BahanBakar_idBahanBakar`)
    REFERENCES `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Transaksi_Pegawai1`
    FOREIGN KEY (`Pegawai_idPegawai`)
    REFERENCES `TubesPW2(1)`.`Pegawai` (`idPegawai`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`Member`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`Member` (
  `idMember` INT NOT NULL AUTO_INCREMENT,
  `TgLahir` VARCHAR(45) NULL,
  `PlatMobil` VARCHAR(45) NULL,
  `PlatMotor` VARCHAR(45) NULL,
  `Poin` INT NULL,
  `Pelangggan_idPelanggan` INT NOT NULL,
  PRIMARY KEY (`idMember`),
  INDEX `fk_Member_Pelangggan1_idx` (`Pelangggan_idPelanggan` ASC) VISIBLE,
  CONSTRAINT `fk_Member_Pelangggan1`
    FOREIGN KEY (`Pelangggan_idPelanggan`)
    REFERENCES `TubesPW2(1)`.`Pelangggan` (`idPelanggan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`DetailBahanBakar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`DetailBahanBakar` (
  `idDetailBahan Bakar` INT NOT NULL AUTO_INCREMENT,
  `TglPerubahan` VARCHAR(45) NULL,
  `HargaModal` INT NULL,
  `HargaJual` INT NULL,
  `BahanBakar_idBahanBakar` INT NOT NULL,
  PRIMARY KEY (`idDetailBahan Bakar`),
  INDEX `fk_Detail Bahan Bakar_Bahan Bakar1_idx` (`BahanBakar_idBahanBakar` ASC) VISIBLE,
  CONSTRAINT `fk_Detail Bahan Bakar_Bahan Bakar1`
    FOREIGN KEY (`BahanBakar_idBahanBakar`)
    REFERENCES `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `TubesPW2(1)`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `TubesPW2(1)`.`User` (
  `idUser` INT NOT NULL,
  `Username` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `TubesPW2(1)`.`BahanBakar`
-- -----------------------------------------------------
START TRANSACTION;
USE `TubesPW2(1)`;
INSERT INTO `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`, `JenisBahanBakar`, `HargaModal`, `HargaJual`) VALUES (1, 'Pertamax Turbo', 8000, 10000);
INSERT INTO `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`, `JenisBahanBakar`, `HargaModal`, `HargaJual`) VALUES (2, 'Pertamax', 6000, 8000);
INSERT INTO `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`, `JenisBahanBakar`, `HargaModal`, `HargaJual`) VALUES (3, 'Pertalite', 4000, 6000);
INSERT INTO `TubesPW2(1)`.`BahanBakar` (`idBahanBakar`, `JenisBahanBakar`, `HargaModal`, `HargaJual`) VALUES (4, 'Solar', 6000, 8000);

COMMIT;


-- -----------------------------------------------------
-- Data for table `TubesPW2(1)`.`Pegawai`
-- -----------------------------------------------------
START TRANSACTION;
USE `TubesPW2(1)`;
INSERT INTO `TubesPW2(1)`.`Pegawai` (`idPegawai`, `NamaPegawai`, `AkumulasiNilai`) VALUES ('PG-1', 'Budi Bidu', '0');
INSERT INTO `TubesPW2(1)`.`Pegawai` (`idPegawai`, `NamaPegawai`, `AkumulasiNilai`) VALUES ('PG-2', 'Amira Mira', '0');
INSERT INTO `TubesPW2(1)`.`Pegawai` (`idPegawai`, `NamaPegawai`, `AkumulasiNilai`) VALUES ('PG-3', 'Ujang Nurdin', '0');
INSERT INTO `TubesPW2(1)`.`Pegawai` (`idPegawai`, `NamaPegawai`, `AkumulasiNilai`) VALUES ('PG-4', 'Nur Hadi', '0');

COMMIT;

