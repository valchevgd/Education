using System;
using System.Collections.Generic;

namespace P03_AMinerTask
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, int> resourceTable = new Dictionary<string, int>();

            while (true)
            {
                string resource = Console.ReadLine();
                if (resource == "stop")
                {
                    break;
                }
                else
                {
                    int quantity = int.Parse(Console.ReadLine());

                    if (!resourceTable.ContainsKey(resource))
                    {
                        resourceTable.Add(resource, quantity);
                    }
                    else
                    {
                        resourceTable[resource] += quantity;
                    }



                }
            }

            foreach (var res in resourceTable)
            {
                Console.WriteLine(string.Join(" -> ", res.Key, res.Value));
            }
        }
    }
}
