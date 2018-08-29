using System;

namespace P05_PhotoGallery
{
    class Program
    {
        static void Main(string[] args)
        {
            int photosNumber = int.Parse(Console.ReadLine());
            int day = int.Parse(Console.ReadLine());
            int month = int.Parse(Console.ReadLine());
            int year = int.Parse(Console.ReadLine());
            int hours = int.Parse(Console.ReadLine());
            int minutes = int.Parse(Console.ReadLine());
            int photoSize = int.Parse(Console.ReadLine());
            int resolutionWidth = int.Parse(Console.ReadLine());
            int resolutionHeight = int.Parse(Console.ReadLine());

            double formatPhotoSize = 0;
            string orientation = "";

            if (resolutionWidth > resolutionHeight)
            {
                orientation = "landscape";
            }
            else if (resolutionWidth == resolutionHeight)
            {
                orientation = "square";
            }
            else
            {
                orientation = "portrait";
            }

            Console.WriteLine($"Name: DSC_{photosNumber:d4}.jpg");
            Console.WriteLine($"Date Taken: {day:d2}/{month:d2}/{year} {hours:d2}:{minutes:d2}");

            if (photoSize < 1000)
            {
                Console.WriteLine($"Size: {photoSize}B");
            }
            else if (photoSize < 1000000)
            {
                photoSize /= 1000;
                Console.WriteLine($"Size: {photoSize}KB");
            }
            else
            {
                formatPhotoSize = photoSize / 1000000.0;
                Console.WriteLine($"Size: {formatPhotoSize}MB");
            }

            Console.WriteLine($"Resolution: {resolutionWidth}x{resolutionHeight} ({orientation})");
        }
    }
}
