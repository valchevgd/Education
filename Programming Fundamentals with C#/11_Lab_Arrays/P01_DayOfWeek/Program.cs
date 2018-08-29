﻿using System;

namespace P01_DayOfWeek
{
    class Program
    {
        static void Main(string[] args)
        {
            int dayNumber = int.Parse(Console.ReadLine());

            string[] daysOfWeek = { "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" };

            if (dayNumber > 0 && dayNumber < 8)
            {
                Console.WriteLine(daysOfWeek[dayNumber - 1]);
            }
            else
            {
                Console.WriteLine("Invalid Day!");
            }

        }
    }
}
