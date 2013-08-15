package main

import(
	"os"
	"fmt"
	"path/filepath"
)

func main() {
	
	absolutePath, _ := filepath.Abs(os.Args[0])
	absoluteDir := filepath.Dir(absolutePath) + "/"
	fmt.Println(absoluteDir)

	//bufferedReader := bufio.NewReader(os.Open("
	
	//appToRun := "wget"
	
	//cmd, err := exec.Run(app, []string{app, }
}
