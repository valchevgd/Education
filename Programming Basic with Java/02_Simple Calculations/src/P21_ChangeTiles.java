import java.util.Scanner;

public class P21_ChangeTiles {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        int placeSide = Integer.parseInt(input.nextLine());
        double tileWidth = Double.parseDouble(input.nextLine());
        double tileLight = Double.parseDouble(input.nextLine());
        int benchWidth = Integer.parseInt(input.nextLine());
        int benchLight = Integer.parseInt(input.nextLine());

        int placeArea = placeSide * placeSide;
        double tileArea = tileLight * tileWidth;
        int benchArea = benchWidth * benchLight;
        int placeToCover = placeArea - benchArea;

        double tilesNeeded = placeToCover / tileArea;
        double timeNeeded = tilesNeeded * 0.2;

        System.out.println(tilesNeeded);
        System.out.println(timeNeeded);
    }
}
