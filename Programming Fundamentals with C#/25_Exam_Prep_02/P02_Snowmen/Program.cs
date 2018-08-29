using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_Snowmen
{
    class Program
    {
        static void Main(string[] args)
        {
            List<int> snowmens = Console.ReadLine()
                .Split()
                .Select(int.Parse)
                .ToList();

            while (snowmens.Count > 1)
            {
                List<int> defeated = new List<int>();

                for (int i = 0; i < snowmens.Count; i++)
                {
                    if (defeated.Contains(i))
                    {
                        continue;
                    }

                    int attacker = i;
                    
                    int target = target = snowmens[attacker] % snowmens.Count;

                    int difference = Math.Abs(attacker - target);

                    if (difference == 0)
                    {
                        Console.WriteLine($"{attacker} performed harakiri");
                        defeated.Add(attacker);
                        if (snowmens.Count == defeated.Count + 1)
                        {
                            break;
                        }
                    }
                    else if (difference % 2 != 0)
                    {
                        Console.WriteLine($"{attacker} x {target} -> {target} wins");
                        defeated.Add(attacker);
                        if (snowmens.Count == defeated.Count + 1)
                        {
                            break;
                        }
                    }
                    else
                    {
                        Console.WriteLine($"{attacker} x {target} -> {attacker} wins");
                        defeated.Add(target);
                        if (snowmens.Count == defeated.Count + 1)
                        {
                            break;
                        }
                    }
                }

                for (int i = snowmens.Count - 1; i >= 0; i--)
                {
                    if (defeated.Count == 0)
                    {
                        break;
                    }
                    for (int j = defeated.Count - 1; j >= 0; j--)
                    {
                        if (defeated[j] == i)
                        {
                            snowmens.RemoveAt(i);
                            defeated.RemoveAt(j);
                            break;
                        }
                    }
                }
            }
        }
    }
}
