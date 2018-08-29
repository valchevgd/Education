using System;
using System.Numerics;

namespace P01_SinoTheWalker
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] startTime = Console.ReadLine()
                .Split(':');

            BigInteger startHour = ulong.Parse(startTime[0]);
            BigInteger startMinutes = ulong.Parse(startTime[1]);
            BigInteger startSeconds = ulong.Parse(startTime[2]);

            BigInteger stepsToHome = ulong.Parse(Console.ReadLine());
            BigInteger secondsPerStep = ulong.Parse(Console.ReadLine());

            BigInteger totalTime = stepsToHome * secondsPerStep;
            BigInteger houers = totalTime / 3600;
            BigInteger minutes = (totalTime % 3600) / 60;
            BigInteger seconds = (totalTime % 3600) % 60;

            BigInteger totalHours = startHour + houers;
            BigInteger totalMinutes = startMinutes + minutes;
            BigInteger totalSeconds = startSeconds + seconds;

            if (totalSeconds >= 60)
            {
                totalMinutes++;
                totalSeconds -= 60;
            }
            if (totalMinutes >= 60)
            {
                totalHours++;
                totalMinutes -= 60;
            }
            if (totalHours >= 24)
            {
                totalHours %= 24;
            }

            Console.WriteLine($"Time Arrival: {totalHours:d2}:{totalMinutes:d2}:{totalSeconds:d2}");
        }
    }
}
