public class PopulasiBakteri_Act2 {
    public static void main(String[] args) {
        double popAwal = 150000;   
        double t = 10;             // Durasi waktu
        double popAkhir;           // Untuk menyimpan populasi akhir
        double e = 2.718281828;
        // [1] Hitung populasi akhir.
        // Populasi akhir harus dalam nilai bulat.
        // popAkhir = Math.pow(popAwal ,Math.sqrt(t));
        e = Math.pow(e, 0.5 * 10);
        popAkhir = popAwal * e;


        // [2] Cetak populasi awal dan populasi akhir.
        System.out.println("Populasi awal = " + (int) popAwal);
        System.out.println("Populasi akhir = " + (int) popAkhir);
    }
}
