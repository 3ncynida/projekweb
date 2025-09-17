-- ==========================
-- Table: Pelanggan
-- ==========================
CREATE TABLE Pelanggan (
    PelangganID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NamaPelanggan VARCHAR(255) NOT NULL,
    Alamat TEXT,
    NomorTelepon VARCHAR(15)
);

DROP DATABASE projekweb;

DROP TABLE Pelanggan;

INSERT INTO Pelanggan (PelangganID, NamaPelanggan, Alamat, NomorTelepon) VALUES
(1, 'Andi', 'Jl. Merpati No. 10', '081234567890'),
(2, 'Budi', 'Jl. Kenanga No. 22', '082345678901'),
(3, 'Citra', 'Jl. Melati No. 5', '083456789012');


-- ==========================
-- Table: Produk
-- ==========================
CREATE TABLE Produk (
    ProdukID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    NamaProduk VARCHAR(255) NOT NULL,
    Harga DECIMAL(10,2),
    Stok INT
);

DROP TABLE Produk;

INSERT INTO Produk (ProdukID, NamaProduk, Harga, Stok) VALUES
(1, 'Laptop', 7500000.00, 5),
(2, 'Mouse', 150000.00, 20),
(3, 'Keyboard', 300000.00, 15),
(4, 'Monitor', 1250000.00, 10);


-- ==========================
-- Table: Penjualan
-- ==========================
CREATE TABLE Penjualan (
    PenjualanID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    TanggalPenjualan DATE,
    TotalHarga DECIMAL(10,2),
    PelangganID INT NOT NULL,
    CONSTRAINT fk_penjualan_pelanggan FOREIGN KEY (PelangganID) REFERENCES Pelanggan(PelangganID)
);

DROP TABLE Penjualan;

INSERT INTO Penjualan (PenjualanID, TanggalPenjualan, TotalHarga, PelangganID) VALUES
(1, '2025-09-01', 7800000.00, 1),
(2, '2025-09-02', 1350000.00, 2),
(3, '2025-09-03', 300000.00, 3);


-- ==========================
-- Table: DetailPenjualan
-- ==========================
CREATE TABLE DetailPenjualan (
    DetailID INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    PenjualanID INT NOT NULL,
    ProdukID INT NOT NULL,
    JumlahProduk INT,
    Subtotal DECIMAL(10,2),
    CONSTRAINT fk_detail_penjualan FOREIGN KEY (PenjualanID) REFERENCES Penjualan(PenjualanID),
    CONSTRAINT fk_detail_produk FOREIGN KEY (ProdukID) REFERENCES Produk(ProdukID)
);

DROP TABLE DetailPenjualan;

INSERT INTO DetailPenjualan (DetailID, PenjualanID, ProdukID, JumlahProduk, Subtotal) VALUES
(1, 1, 1, 1, 7500000.00),   -- Laptop dibeli 1
(2, 1, 2, 2, 300000.00),    -- Mouse dibeli 2
(3, 2, 4, 1, 1250000.00),   -- Monitor dibeli 1
(4, 2, 2, 1, 150000.00),    -- Mouse dibeli 1
(5, 3, 3, 1, 300000.00);    -- Keyboard dibeli 1


-- ==========================
-- Contoh Query Join
-- ==========================
-- Menampilkan detail transaksi beserta nama pelanggan & produk
SELECT
    Penjualan.PenjualanID,
    Pelanggan.NamaPelanggan,
    Produk.NamaProduk,
    DetailPenjualan.JumlahProduk,
    DetailPenjualan.Subtotal,
    Penjualan.TotalHarga
FROM
    Penjualan
INNER JOIN Pelanggan ON Penjualan.PelangganID = Pelanggan.PelangganID
INNER JOIN DetailPenjualan ON Penjualan.PenjualanID = DetailPenjualan.PenjualanID
INNER JOIN Produk ON DetailPenjualan.ProdukID = Produk.ProdukID;
