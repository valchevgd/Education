﻿using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_SortNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            List<decimal> nums = Console.ReadLine()
                .Split()
                .Select(decimal.Parse)
                .ToList();

            nums.Sort();

            Console.WriteLine(string.Join(" ", nums));

        }
    }
}
