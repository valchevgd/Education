using System;
using System.Collections.Generic;
using System.Linq;

namespace P05_ArrayManipulator
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
                string[] comands = Console.ReadLine()
                    .Split()
                    .ToArray();
                int num = 0;

                if (comands[0] == "print")
                {
                    Console.WriteLine($"[{string.Join(", ", nums)}]");
                    break;
                }
                else if (comands[0] == "add")
                {
                    int index = int.Parse(comands[1]);
                    int element = int.Parse(comands[2]);
                    nums.Insert(index, element);
                }
                else if (comands[0] == "addMany")
                {
                    int index = int.Parse(comands[1]);
                    List<int> numbersToAdd = new List<int>();
                    for (int i = 2; i < comands.Length; i++)
                    {
                        numbersToAdd.Add(int.Parse(comands[i]));
                    }
                    nums.InsertRange(index, numbersToAdd);
                }
                else if (comands[0] == "contains")
                {
                    num = int.Parse(comands[1]);

                    int index = nums.IndexOf(num);
                    Console.WriteLine(index);

                }
                else if (comands[0] == "remove")
                {
                    num = int.Parse(comands[1]);
                    nums.RemoveAt(num);
                }
                else if (comands[0] == "sumPairs")
                {
                    for (int i = 0; i < nums.Count - 1; i ++)
                    {
                        nums[i] += nums[i + 1];
                        nums.RemoveAt(i + 1);
                    }

                }
                else if (comands[0] == "shift")
                {
                    num = int.Parse(comands[1]);
                    for (int i = 0; i < num % nums.Count; i++)
                    {
                        int lastDigit = nums[0];
                        nums.RemoveAt(0);
                        nums.Add(lastDigit);
                    }
                }

            }
        }
    }
}
