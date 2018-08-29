using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_ChangeList
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> nums = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            while (true)
            {
                List<string> comand = Console.ReadLine()
                    .Split()
                    .ToList();

                if (comand[0] == "Delete")
                {
                    
                    for (int i = 0; i < nums.Count; i++)
                    {
                        nums.Remove(int.Parse(comand[1]));
                    }
                }
                else if (comand[0] == "Insert")
                {
                    nums.Insert(int.Parse(comand[2]), int.Parse(comand[1]));
                }
                else if (comand[0] == "Odd")
                {
                    for (int i = 0; i < nums.Count; i++)
                    {
                        if (nums[i] % 2 != 0)
                        {
                            Console.Write(nums[i] + " ");
                        }
                        
                    }
                    Console.WriteLine();
                    break;
                }
                else if (comand[0] == "Even")
                {
                    for (int i = 0; i < nums.Count; i++)
                    {
                        if (nums[i] % 2 == 0)
                        {
                            Console.Write(nums[i] + " ");
                        }
                        
                    }
                    Console.WriteLine();
                    break;
                }
            }
        }
    }
}
