public class GayaGravitasi_Act2 {
    public static void main(String[] args) {
        final double GRAVITASI = 6.674E-11; // Konstanta gravitasi
        double m1 = 40, m2 = 30;            // Massa objek 1 dan objek 2
        double r = 2;                       // Jarak antara objek 1 dan objek 2
        double force;                       // Gaya tarik gravitasi

        // Menghitung gaya tarik gravitasi
        force = (GRAVITASI * m1 * m2) / (r * r);

        // Menampilkan hasil
        System.out.println("F = " + force);
    }
}
