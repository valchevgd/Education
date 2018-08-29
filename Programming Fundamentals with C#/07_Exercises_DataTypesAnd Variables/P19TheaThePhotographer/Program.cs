using System;

namespace P19TheaThePhotographer
{
    class Program
    {
        static void Main(string[] args)
        {
            ulong numberOfPictures = ulong.Parse(Console.ReadLine());
            ulong filterTimeInSec = ulong.Parse(Console.ReadLine());
            ulong precentGood = ulong.Parse(Console.ReadLine());
            ulong uploadTime = ulong.Parse(Console.ReadLine());

            ulong timeForFiltring = numberOfPictures * filterTimeInSec;
            double numberOfGoodPictures = Math.Ceiling(numberOfPictures * (precentGood / 100.0));
            string numberOfGoodPicturesStr = System.Convert.ToString(numberOfGoodPictures);
            ulong numberOfGoodPicturesInt = ulong.Parse(numberOfGoodPicturesStr);
            ulong timeForUpload = numberOfGoodPicturesInt * uploadTime;
            ulong totalTime = timeForFiltring + timeForUpload;

            ulong days = totalTime / 86400;
            totalTime %= 86400;
            ulong hours = totalTime / 3600;
            totalTime %= 3600;
            ulong minutes = totalTime / 60;
            ulong secunds = totalTime % 60;

            if (hours == 24)
            {
                hours--;
                
            }
            if (minutes == 60)
            {
                minutes = 0;
                hours++;
            }
            if (secunds == 60)
            {
                secunds = 0;
                minutes++;
            }

            Console.WriteLine($"{days}:{hours:d2}:{minutes:d2}:{secunds:d2}");
            //Console.WriteLine(totalTime);

        }
    }
}
