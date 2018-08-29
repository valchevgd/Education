using System;
using System.Collections.Generic;
using System.Linq;

namespace P03_SearchForANumber
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            List<int> comands = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            int take = comands[0];
            int delete = comands[1];
            int find = comands[2];

            List<int> newList = new List<int>(take);

            

            bool isHere = false;

            for (int i = 0; i < newList.Capacity; i++)
            {
                newList.Add(nums[i]);
            }

            for (int i = 0; i < delete; i++)
            {
                newList.RemoveAt(0);
            }

            for (int i = 0; i < newList.Count; i++)
            {
                if (newList[i] == find)
                {
                    isHere = true;
                }
            }

            if (isHere)
            {
                Console.WriteLine("YES!");
            }
            else
            {
                Console.WriteLine("NO!");
            }

        }
    }
}
