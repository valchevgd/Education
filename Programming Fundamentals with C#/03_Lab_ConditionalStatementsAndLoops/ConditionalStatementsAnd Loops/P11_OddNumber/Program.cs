﻿using System;

namespace P11_OddNumber
{
    class Program
    {
        static void Main(string[] args)
        {

            while (true)
            {
                int number = int.Parse(Console.ReadLine());

                if (number % 2 == 0)
                {
                    Console.WriteLine("Please write an odd number.");
                }
                else
                {
                    Console.WriteLine("The number is: " + Math.Abs(number));
                    break;
                
                }
            }
        }
    }
}
