using System;
using System.Collections.Generic;
using System.Linq;

namespace P02_
{
    class Program
    {
        static void Main(string[] args)
        {
            List<string> courseSchedule = Console.ReadLine()
                .Split(", ")
                .ToList();

            string line = Console.ReadLine();

            while (line != "course start")
            {
                string[] tokens = line
                    .Split(':');

                string comand = tokens[0];

                if (comand == "Add")
                {
                    string lesson = tokens[1];
                    if (courseSchedule.Contains(lesson) == false)
                    {
                        courseSchedule.Add(lesson);
                    }
                }
                else if (comand == "Insert")
                {
                    string lesson = tokens[1];
                    int index = int.Parse(tokens[2]);
                    if ((courseSchedule.Contains(lesson) == false) && (index < courseSchedule.Count))
                    {
                        courseSchedule.Insert(index, lesson);
                    }
                }
                else if (comand == "Remove")
                {
                    string lesson = tokens[1];
                    if (courseSchedule.Contains(lesson))
                    {
                        int index = courseSchedule.IndexOf(lesson);
                        if (courseSchedule.Contains($"{lesson}-Exercise"))
                        {
                            courseSchedule.RemoveAt(index + 1);
                        }
                        courseSchedule.Remove(lesson);
                    }
                }
                else if (comand == "Swap")
                {
                    string lessonOne = tokens[1];
                    string lessonTwo = tokens[2];
                    if (courseSchedule.Contains(lessonOne) && courseSchedule.Contains(lessonTwo))
                    {
                        int indexOfLessonOne = courseSchedule.IndexOf(lessonOne);
                        int indexOfLessonTwo = courseSchedule.IndexOf(lessonTwo);
                        string tempOne = courseSchedule[indexOfLessonOne];
                        string tempTwo = courseSchedule[indexOfLessonTwo];
                        courseSchedule.Remove(lessonOne);
                        courseSchedule.Remove(lessonTwo);
                        courseSchedule.Insert(indexOfLessonOne, tempTwo);
                        courseSchedule.Insert(indexOfLessonTwo, tempOne);
                        if ((courseSchedule.Contains($"{lessonOne}-Exercise"))
                            && (courseSchedule.Contains($"{lessonTwo}-Exercise")))
                        {
                            int indexOfExOne = indexOfLessonOne + 1;
                            int indexOfExTwo = indexOfLessonTwo + 1;
                            string tempExOne = courseSchedule[indexOfExOne];
                            string tempExTwo = courseSchedule[indexOfExTwo];
                            courseSchedule.RemoveAt(indexOfExTwo);
                            courseSchedule.RemoveAt(indexOfExOne);
                            courseSchedule.Insert(indexOfExOne, tempExTwo);
                            if (indexOfExTwo >= courseSchedule.Count)
                            {
                                courseSchedule.Add(tempExOne);
                            }
                            else
                            {
                                courseSchedule.Insert(indexOfExTwo, tempExOne);
                            }

                        }
                        else if (courseSchedule.Contains($"{lessonOne}-Exercise"))
                        {
                            int indexOfExOne = indexOfLessonOne + 1;
                            string tempExOne = courseSchedule[indexOfExOne];
                            courseSchedule.RemoveAt(indexOfExOne);
                            if (indexOfLessonTwo + 1 >= courseSchedule.Count)
                            {
                                courseSchedule.Add(tempExOne);
                            }
                            else
                            {
                                courseSchedule.Insert(indexOfLessonTwo + 1, tempExOne);
                            }
                        }
                        else if (courseSchedule.Contains($"{lessonTwo}-Exercise"))
                        {
                            int indexOfExTwo = indexOfLessonTwo + 1;
                            string tempExTwo = courseSchedule[indexOfExTwo];
                            courseSchedule.RemoveAt(indexOfExTwo);
                            courseSchedule.Insert(indexOfLessonOne + 1, tempExTwo);

                        }

                    }
                }
                else if (comand == "Exercise")
                {
                    string lesson = tokens[1];
                    if (courseSchedule.Contains(lesson) == false)
                    {
                        courseSchedule.Add(lesson);
                        courseSchedule.Add($"{lesson}-Exercise");
                    }
                    else if ((courseSchedule.Contains(lesson)) && (courseSchedule.Contains($"{lesson}-Exercise") == false))
                    {
                        int index = courseSchedule.IndexOf(lesson);
                        courseSchedule.Insert(index + 1, $"{lesson}-Exercise");
                    }
                }

                line = Console.ReadLine();
            }

            int num = 1;

            foreach (var lesson in courseSchedule)
            {
                Console.WriteLine($"{num}.{lesson}");
                num++;
            }
        }
    }
}
