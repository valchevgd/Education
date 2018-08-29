using System;

namespace P10_CenturiesToNanoseconds
{
    class Program
    {
        static void Main(string[] args)
        {
            
            int centuries = int.Parse(Console.ReadLine());

            int years = centuries * 100;
            int days = (int)(years * 365.2422);
            int hours = days * 24;
            int minutes = hours * 60;
            long seconds = minutes * 60L;
            long miliseconds = seconds * 1000L;
            long microseconds = miliseconds * 1000L;
            decimal nanoseconds = microseconds * 1000m;

            Console.WriteLine($"{centuries} centuries = {years} years = {days} days = {hours} hours = {minutes} minutes = {seconds} seconds = {miliseconds} milliseconds = {microseconds} microseconds = {nanoseconds} nanoseconds");
        }
    }
}
