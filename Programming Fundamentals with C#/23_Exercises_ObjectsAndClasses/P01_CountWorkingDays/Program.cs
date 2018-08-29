using System;
using System.Globalization;
using System.Linq;

namespace P01_CountWorkingDays
{
    class Program
    {
        static void Main(string[] args)
        {
            DateTime startData = DateTime.ParseExact(Console.ReadLine(), "dd-MM-yyyy", CultureInfo.InvariantCulture);
            DateTime endData = DateTime.ParseExact(Console.ReadLine(), "dd-MM-yyyy", CultureInfo.InvariantCulture);

            DateTime[] nonWorkingDays =
            {
                new DateTime(1986, 1, 1),
                new DateTime(1986, 3, 3),
                new DateTime(1986, 5, 1),
                new DateTime(1986, 5, 6),
                new DateTime(1986, 5, 24),
                new DateTime(1986, 9, 6),
                new DateTime(1986, 9, 22),
                new DateTime(1986, 12, 24),
                new DateTime(1986, 12, 25),
                new DateTime(1986, 12, 26)
            };

            int countWorkingDays = 0;

            for (DateTime day = startData; day <= endData; day = day.AddDays(1))
            {
                DateTime tempData = new DateTime(1986, day.Month, day.Day);

                if (!(day.DayOfWeek == DayOfWeek.Saturday) 
                    && !(day.DayOfWeek == DayOfWeek.Sunday) 
                    && !(nonWorkingDays.Contains(tempData)))
                {
                    countWorkingDays++;
                }
            }
            Console.WriteLine(countWorkingDays);
        }
    }
}
