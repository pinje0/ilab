public class VolumeBola_Act2 {
    public static void main(String[] args) throws Exception {
        double r = 7.5; // Jari-jari bola
        double volume;  // Untuk menyimpan hasil penghitungan volume bola
    
        // [1] Hitung volume bola
        volume = (4.0 / 3.0) * Math.PI * Math.pow(r, 3);
        
        // [2] Tampilkan volume bola
        System.out.println("Volume bola = " + volume);
    }
}
