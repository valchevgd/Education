using System;

namespace P05_BPMCounter
{
    class Program
    {
        static void Main(string[] args)
        {
            int beatsPerSecond = int.Parse(Console.ReadLine());
            int beats = int.Parse(Console.ReadLine());

            double bars = beats / 4.0;
            double sequence = beats / (double)beatsPerSecond * 60;
            double minutes = Math.Floor(sequence) / 60;
            double seconds = Math.Floor(sequence) % 60;

            
               
                Console.WriteLine($"{Math.Round(bars, 1)} bars - {Math.Floor(minutes)}m {seconds}s");
            


        }
    }
}
