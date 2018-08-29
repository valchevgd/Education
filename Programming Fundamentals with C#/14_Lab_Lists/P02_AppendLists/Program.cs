using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_AppendLists
{
    class Program
    {
        static void Main(string[] args)
        {
            List<string> nums = Console.ReadLine()
                .Split('|')
                .ToList();

            nums.Reverse();

            List<string> result = new List<string>();

            for (int i = 0; i < nums.Count; i++)
            {
                string temp = nums[i];
                string[] tempArr = temp.Split(new char[] {' '}, StringSplitOptions.RemoveEmptyEntries);
                string temp2 = string.Join(" ", tempArr);
                result.Add(temp2);
            }
                Console.WriteLine(string.Join(" ", result));
        }
    }
}


    

