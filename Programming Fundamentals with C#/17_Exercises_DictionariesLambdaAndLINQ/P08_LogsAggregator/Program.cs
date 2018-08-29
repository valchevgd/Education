using System;
using System.Collections.Generic;
using System.Linq;

namespace P08_LogsAggregator
{
    class Program
    {
        static void Main(string[] args)
        {
             Dictionary<string, int> listOfLogs 
                = new Dictionary<string, int>();
            Dictionary<string, List<string>> listOfIps = new Dictionary<string, List<string>>();

            int count = int.Parse(Console.ReadLine());

            for (int i = 0; i < count; i++)
            {
                string[] input = Console.ReadLine().Split();

                string user = input[1];
                string ip = input[0];
                int duration = int.Parse(input[2]);

                if (!listOfLogs.ContainsKey(user))
                {
                    listOfLogs.Add(user, 0);
                    listOfIps.Add(user, new List<string>());
                }

                listOfLogs[user] += duration;
                if (listOfIps[user].Contains(ip) == false)
                {
                    listOfIps[user].Add(ip);
                }
               
            }

           

            foreach (var user in listOfLogs.OrderBy(x => x.Key))
            {
                Console.Write($"{user.Key}: {user.Value} ");

                List<string> ips = listOfIps[user.Key];
                ips = ips
                    .OrderBy(x => x)
                    .ToList();


                Console.Write("[");
                
                    Console.Write(string.Join(", ", ips));
              
                Console.WriteLine("]");
                    
            }
        }
    }
}
