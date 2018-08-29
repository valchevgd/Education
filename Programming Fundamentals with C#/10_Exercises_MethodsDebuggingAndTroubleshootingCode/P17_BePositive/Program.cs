using System;
using System.Collections.Generic;

namespace P17_BePositive
{
    class Program
    {
        static void Main(string[] args)
        {
            int countSequences = int.Parse(Console.ReadLine());

            for (int i = 0; i < countSequences; i++)
            {
                string[] input = Console.ReadLine().Split(' ');
                var numbers = new List<int>();

                for (int j = 0; j < input.Length; j++)
                {
                    if (!input[j].Equals(string.Empty))
                    {
                        int num = int.Parse(input[j]);
                        numbers.Add(num);
                    }
                }

                bool found = false;
                int newNum = 0;

                for (int j = 0; j < numbers.Count; j++)
                {
                    
                    int currentNum = numbers[j];

                    if (newNum < 0)
                    {
                        currentNum += newNum;

                        if (currentNum >= 0)
                        {
                            if (found)
                            {
                                Console.Write(" ");
                            }

                            Console.Write(currentNum);

                            found = true;
                            newNum = 0;
                        }
                       
                        newNum = 0;
                    }
                    else if (currentNum >= 0)
                    {
                        if (found)
                        {
                            Console.Write(" ");
                        }

                        Console.Write(currentNum);

                        found = true;
                        newNum = 0;
                    }
                    else
                    {
                        newNum = currentNum;
                    }
                }

                if (!found)
                {
                    Console.WriteLine("(empty)");
                }
                Console.WriteLine();

            }
        }
    }
}
