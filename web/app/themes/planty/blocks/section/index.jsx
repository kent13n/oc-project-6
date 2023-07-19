const { registerBlockType } = wp.blocks;
const {
	RichText,
	InspectorControls,
	MediaUpload,
	MediaUploadCheck,
	InnerBlocks,
} = wp.blockEditor;
const { ColorPicker, PanelBody, TextControl, Button, ToggleControl } =
	wp.components;
const { __ } = wp.i18n;

registerBlockType("planty/section", {
	title: __("Section", "planty"),
	icon: "text-page",
	category: "theme",
	edit({ className, attributes, setAttributes }) {
		const { waveSeparator, waveHeight, waveMarker } = attributes;
		const style = {};
		if (typeof attributes.backgroundColor !== "undefined") {
			style.backgroundColor = attributes.backgroundColor;
		}

		const height =
			typeof waveHeight === "number" && waveHeight > 0 ? waveHeight : 40;
		const separator = GenerateSeparator(attributes.waveSeparator, height, waveMarker);

		return (
			<div className={className} style={style}>
				<InnerBlocks />
				{separator}
				<InspectorControls>
					<PanelBody title="Couleur de fond" initialOpen={false}>
						<ColorPicker
							color={attributes.backgroundColor}
							onChangeComplete={(color) =>
								setAttributes({ backgroundColor: color.hex })
							}
							disableAlpha
						/>
					</PanelBody>
					<PanelBody title="Wave Separator" initialOpen={false}>
						<ToggleControl
							label="Afficher Wave Separator"
							checked={waveSeparator}
							onChange={() =>
								setAttributes({ waveSeparator: !waveSeparator })
							}
						/>
                        <ToggleControl
							label="Activer marker"
							checked={waveMarker}
							onChange={() =>
								setAttributes({ waveMarker: !waveMarker })
							}
						/>
						<TextControl
							label="Hauteur du separator:"
							value={attributes.waveHeight}
							onChange={(val) => {
								if (val === "")
									setAttributes({ waveHeight: val });

								let height = parseInt(val);
								if (height !== NaN && height > 0) {
									setAttributes({ waveHeight: height });
								}
							}}
						/>
					</PanelBody>
				</InspectorControls>
			</div>
		);
	},
	save({ className, attributes }) {
		const style = {};
		if (typeof attributes.backgroundColor !== "undefined") {
			style.backgroundColor = attributes.backgroundColor;
		}

		const height =
			typeof attributes.waveHeight === "number" &&
			attributes.waveHeight > 0
				? attributes.waveHeight
				: 40;
		const separator = GenerateSeparator(attributes.waveSeparator, height, attributes.waveMarker);

		return (
			<div className={className} style={style}>
				<InnerBlocks.Content />
				{separator}
			</div>
		);
	},
});

function GenerateSeparator(divider, height, marker = false) {
	const style = {
		height: height + "px",
	};

    const path = marker ? <path className="cls-1" d="M600,107.5C268.6,107.5,12.7,63.6.2,7.2H0V120H1200V7.2h-1.3C1174.9,63.6,931.4,107.5,600,107.5Z" transform="translate(0 -7.2)" fillOpacity="0.1"/> : '';

	return divider ? (
		<svg
			xmlns="http://www.w3.org/2000/svg"
			data-name="Layer 1"
			viewBox="0 0 1200 120"
			preserveAspectRatio="none"
			className="wave-divider"
			style={style}
		>
            {path}
			<path
				d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
				className="shape-fill"
				fill="#FFFFFF"
				fillOpacity="1"
			></path>
		</svg>
	) : (
		""
	);
}
