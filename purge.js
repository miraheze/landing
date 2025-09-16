
import fs from 'fs';
import { PurgeCSS } from 'purgecss';
import * as glob from 'glob';

async function purgeAllCss() {
	const cssFiles = glob.sync('**/*.css');
	const contentFiles = glob.sync('**/*.{html,js,php}');

	for (const file of cssFiles) {
		const purged = await new PurgeCSS().purge({
			content: contentFiles,
			css: [file],
		});
		fs.writeFileSync(file, purged[0].css);
		console.log(`Purged: ${file}`);
	}
}

purgeAllCss();