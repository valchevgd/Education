using System;
using System.Collections.Generic;
using System.Linq;

namespace P03_ImmuneSystem
{
    class Program
    {
        static void Main(string[] args)
        {
            int healthOfImmuneSystem = int.Parse(Console.ReadLine());
            int startingHealth = healthOfImmuneSystem;
            List<string> viruses = new List<string>();

            while (true)
            {
                string line = Console.ReadLine();
                if (line == "end")
                {
                    Console.WriteLine($"Final Health: {healthOfImmuneSystem}");
                    break;
                }

                char[] virus = line.ToCharArray();

                int virusStrenght = 0;

                for (int i = 0; i < virus.Length; i++)
                {
                    virusStrenght += (int)virus[i];
                }

                virusStrenght /= 3;
                int timeToDefeat = virusStrenght * virus.Length;
                if (viruses.Contains(line))
                {
                    timeToDefeat /= 3; 
                }
                viruses.Add(line);
                int minToDefeat = timeToDefeat / 60;
                int secToDefeat = timeToDefeat % 60;

                Console.WriteLine($"Virus {line}: {virusStrenght} => {timeToDefeat} seconds");
                healthOfImmuneSystem -= timeToDefeat;
                if (healthOfImmuneSystem >= 0)
                {
                    Console.WriteLine($"{line} defeated in {minToDefeat}m {secToDefeat}s.");
                    Console.WriteLine($"Remaining health: {healthOfImmuneSystem}");
                    healthOfImmuneSystem += healthOfImmuneSystem * 20 / 100;
                    if (healthOfImmuneSystem > startingHealth)
                    {
                        healthOfImmuneSystem = startingHealth;
                    }
                }
                else
                {
                    Console.WriteLine("Immune System Defeated.");
                    break;
                }
            }
        }
    }
}
