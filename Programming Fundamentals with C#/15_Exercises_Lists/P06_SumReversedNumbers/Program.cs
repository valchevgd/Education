using System;
using System.Collections.Generic;
using System.Linq;

namespace P06_SumReversedNumbers
{
    class Program
    {
        static void Main(string[] args)
        {
            List<double> nums = Console.ReadLine()
                .Split()
                .Select(double.Parse)
                .ToList();
            

            double sum = 0;

            for (int i = 0; i < nums.Count; i++)
            {
                double temp = nums[i];

                string num = new string(temp.ToString().Reverse().ToArray());
                

                sum += double.Parse(num);

            }

            Console.WriteLine(sum);
           

            



        }

    }
}
