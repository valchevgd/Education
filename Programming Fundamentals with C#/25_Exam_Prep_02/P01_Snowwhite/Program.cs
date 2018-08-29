using System;
using System.Collections.Generic;
using System.Linq;

namespace P04_Snowwhite
{
    class Program
    {
        static void Main(string[] args)
        {
            Dictionary<string, Dictionary<string, ulong>> dwarfs =
                new Dictionary<string, Dictionary<string, ulong>>();

            string line = Console.ReadLine();

            while ("Once upon a time" != line)
            {
                string[] tokens = line
                    .Split();

                string dwarfName = tokens[0];
                string dwarfHatColor = tokens[2];
                ulong dwarfPhysics = ulong.Parse(tokens[4]);

                if (dwarfs.ContainsKey(dwarfName) == false)
                {
                    dwarfs.Add(dwarfName, new Dictionary<string, ulong>());
                    dwarfs[dwarfName].Add(dwarfHatColor, dwarfPhysics);
                }
                if (dwarfs[dwarfName].ContainsKey(dwarfHatColor) == false)
                {
                    
                    dwarfs[dwarfName].Add(dwarfHatColor, dwarfPhysics);
                }
                if (dwarfs[dwarfName][dwarfHatColor] < dwarfPhysics)
                {
                    dwarfs[dwarfName][dwarfHatColor] = dwarfPhysics;
                }

                line = Console.ReadLine();
            }

            foreach (var dwarf in dwarfs)
            {
                foreach (var item in dwarf.Value)
                {
                    Console.WriteLine($"({item.Key}) {dwarf.Key} <-> {item.Value}");
                    
                }
                
            }
        }
    }
}
